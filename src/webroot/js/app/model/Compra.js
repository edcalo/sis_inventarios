Ext.define('SisInventarios.model.Compra', {
    extend: 'Ext.data.Model',
    fields: [{
        name:'id',
        type: 'int',
        mapping: 'id'
    },
    'credito_id',
    'empleado_id',
    'proveedor_id',
    'moneda_id',
    {name:'fecha_compra', mapping:'fecha_compra', type:'date', format:'Y/m/d'},
    'monto_total'
    ]
});