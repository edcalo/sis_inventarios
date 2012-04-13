Ext.define('SisInventarios.model.Proveedor', {
    extend: 'Ext.data.Model',
    fields: [{
            name:'id',
            type: 'int',
            mapping: 'id'
        },
        'nombre_proveedor',
        'direccion_proveedor',
        {
            name:'telefono',
            type: 'int',
            mapping: 'telefono'
        },
        'email',
        'contacto',
        'email_contacto',
        {
            name:'telefono_contacto',
            mapping:'telefono_contacto',
            type:'int'
        }
    ]
});