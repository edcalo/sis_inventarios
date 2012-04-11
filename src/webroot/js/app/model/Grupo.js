Ext.define('SisInventarios.model.Grupo', {
    extend: 'Ext.data.Model',
    fields: [{
        name:'id',
        type: 'int',
        mapping: 'id'
    },
    {
        name: 'padre_id',
        type: 'int',
        mapping: 'grupo_id'
    },
    'nombre_grupo',
    'codigo',
    'descripcion_grupo'
    ]
});