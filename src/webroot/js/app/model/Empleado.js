Ext.define('SisInventarios.model.Empleado', {
    extend: 'Ext.data.Model',
    fields: [{
        name:'id',
        type: 'int',
        mapping: 'id'
    },
    'nombres',
    'apellido_paterno',
    'apellido_materno',
    'tipo_doc_identidad',
    'doc_identidad',
    'telefono',
    'email',
    'contacto']
});