Ext.define('SisInventarios.model.Dosificacion', {
    extend: 'Ext.data.Model',
    fields: [{
        name:'id',
        type: 'int',
        mapping: 'id'
    },
    'codigo_dosificacion',
    'numero_de_factura']
});