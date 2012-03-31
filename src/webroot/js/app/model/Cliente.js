Ext.define('SisInventarios.model.Cliente', {
    extend: 'Ext.data.Model',
    fields: [{
        name:'id',
        type: 'int',
        mapping: 'id'
    },
    'nit_ci',
    'nombres',
    'apellido_paterno',
    'apellido_materno',
    'telefono',
    'email'
    ]
});