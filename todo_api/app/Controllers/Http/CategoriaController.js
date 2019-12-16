'use strict'

const Categoria = use("App/Models/Categoria");

class CategoriaController {
  async index ({ request, response, view, auth }) {
    const categorias = await Categoria.query().where('user_id', auth.user.id).select('id', 'titulo', 'descricao', 'status').fetch();
    return categorias;
  }
  async store ({ request, response, auth }) {
    const data = request.only(['titulo', 'descricao']);
    data.status = true;
    data.user_id = auth.user.id;
    const categoria = await Categoria.create(data);
    return categoria;
  }
  async show ({ params, request, response, view }) {
  }
  async update ({ params, request, response }) {
  }
  async destroy ({ params, request, response }) {
  }
}

module.exports = CategoriaController
