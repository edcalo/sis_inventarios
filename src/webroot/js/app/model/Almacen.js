Ext.define('SisInventarios.model.Almacen', {
    extend: 'Ext.data.Model',
    fields: [{
        name:'id',
        type: 'int',
        mapping: 'id'
    },
    'nombre_almacen',
    'descripcion_almacen',
    'direccion_almacen'
    ]
});