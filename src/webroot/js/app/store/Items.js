Ext.define('SisInventarios.store.Items', {
    extend: 'Ext.data.Store',
    model: 'SisInventarios.model.Item',
    autoLoad: true,
    proxy: {
        type: 'ajax',
        method:'POST',
        api: {
            read: 'admin/items',
            update: 'admin/items/edit',
            create: 'admin/items/add',
            destroy: 'admin/items/delete'
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