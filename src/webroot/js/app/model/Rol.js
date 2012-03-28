Ext.define('SisInventarios.model.Rol', {
    extend: 'Ext.data.Model',
    fields: [{
        name:'id',
        type: 'int',
        mapping: 'id'
    },
    'nombre_rol',
    'descripcion']
});