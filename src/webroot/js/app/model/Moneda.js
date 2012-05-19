Ext.define('SisInventarios.model.Moneda', {
    extend: 'Ext.data.Model',
    fields: [{
        name:'id',
        type: 'int',
        mapping: 'id'
    },
    'nombre_moneda',
    'simbolo_moneda'
    ]
});