'use strict'

const User = use("App/Models/User");
const Cliente = use("App/Models/Cliente");

class UserController {
	async store({ request, response }) {
		const data = request.all();
		data.ativo = true;
		data.nivel_perfil = "CLIENTE";

		const emailDisponivel = await User.query().where('email', data.email).select('id').first();

		if(!emailDisponivel) {
			const user = await User.create(data);
			const cliente = await Cliente.create({ user_id: user.id });
			return user;
		}
		return response.status(401).json({ message: "Email indisponível" })
	}
	async profile({ response, auth }) {
		const { id, nivel_perfil } = auth.user;

		if(nivel_perfil == "CLIENTE") {
			const user = await User.query().where('id', id).select('id', 'nome', 'email', 'password', 'ativo', 'nivel_perfil', 'created_at').first();
			user.perfil = await user.perfil_cliente().fetch();
			return user;
		}
		return response.status(401).json({ message: "Não autorizado" });
	}
}

module.exports = UserController
