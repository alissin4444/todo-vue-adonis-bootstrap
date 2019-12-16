'use strict'

/** @type {import('@adonisjs/lucid/src/Schema')} */
const Schema = use('Schema')

class ClienteSchema extends Schema {
  up () {
    this.create('clientes', (table) => {
      table.increments()
      table.integer('user_id')
        .unsigned()
        .references('id')
        .inTable('users')
        .onUpdate('CASCADE')
        .onDelete('CASCADE')
 	    table.text('foto')
  	  table.integer('idade')
  	  table.integer('altura')
  	  table.integer('peso')
  	  table.text('sobre')
  	  table.integer('telefone')
  	  table.integer('celular')
  	  table.string('pais')
  	  table.string('estado')
  	  table.string('cidade')
      table.timestamps()
    })
  }

  down () {
    this.drop('clientes')
  }
}

module.exports = ClienteSchema
