'use strict'

const User = use("App/Models/User");

class SessionController {
	async auth({ request, auth }) {
		const { email, password } = request.all();

	    const token = await auth.attempt(email, password);

	    return token;
	}
}

module.exports = SessionController
