Ext.define('SisInventarios.store.Clientes', {
    extend: 'Ext.data.Store',
    model: 'SisInventarios.model.Cliente',
    autoLoad: true,
    proxy: {
        type: 'ajax',
        method:'POST',
        api: {
            read: 'admin/clientes',
            update: 'admin/clientes/edit',
            create: 'admin/clientes/add',
            destroy: 'admin/clientes/delete'
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