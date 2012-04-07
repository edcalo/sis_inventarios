Ext.define('SisInventarios.model.Descuento', {
    extend: 'Ext.data.Model',
    fields: [{
        name:'id',
        type: 'int',
        mapping: 'id'
    },
    'nombre_descuento',
    'fecha_inicio_descuento',
    'fecha_fin_descuento',
    'cuota_inicial',
    'tipo',
    'descripcion_descuento']
});