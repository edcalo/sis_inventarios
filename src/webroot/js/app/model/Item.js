Ext.define('SisInventarios.model.Item', {
    extend: 'Ext.data.Model',
    fields: [{
        name:'id',
        type: 'int',
        mapping: 'id'
    },
    'marca_id',
    'grupo_id',
    'industria_id',
    'almacen_id',
    'nombre_articulo',
    'descripcion',
    'numero_de_serie',
    'codigo',
    'precio_compra',
    'precio_referencia_venta',
    'garantia_compra',
    'compra_id'
    ]
});