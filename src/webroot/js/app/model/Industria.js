Ext.define('SisInventarios.model.Industria', {
    extend: 'Ext.data.Model',
    fields: [{
        name:'id',
        type: 'int',
        mapping: 'id'
    },{
        name:'nombre_industria',
        type:'string',
        mapping:'nombre_industria'
    },{
        name:'descripcion_industria',
        type:'string',
        mapping:'descripcion_industria'
    }]
});