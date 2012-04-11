Ext.define('SisInventarios.store.Grupos', {
    extend: 'Ext.data.Store',
    model: 'SisInventarios.model.Grupo',
    autoLoad: true,
    proxy: {
        type: 'ajax',
        method:'POST',
        api: {
            read: 'admin/grupos',
            update: 'admin/grupos/edit',
            create: 'admin/grupos/add',
            destroy: 'admin/grupos/delete'
        },
        reader: {
            type: 'json',
            root: 'data',
            successProperty: 'success',
            totalProperty: 'total'
        },
        writer: {
            type: 'json',
            writeAllFields: true,
            root: 'data',
            encode:true
        }
    }
});