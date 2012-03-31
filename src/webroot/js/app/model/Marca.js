Ext.define('SisInventarios.model.Marca', {
    extend: 'Ext.data.Model',
    fields: [{
        name:'id',
        type: 'int',
        mapping: 'id'
    },{
        name:'nombre_marca',
        type:'string',
        mapping:'nombre_marca'
    },{
        name:'descripcion_marca', 
        type:'string', 
        mapping:'descripcion_marca'
    }]
});