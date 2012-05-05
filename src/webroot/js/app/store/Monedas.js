Ext.define('SisInventarios.store.Monedas', {
    extend: 'Ext.data.Store',
    model: 'SisInventarios.model.Moneda',
    autoLoad: true,
    proxy: {
        type: 'ajax',
        method:'POST',
        api: {
            read: 'admin/monedas',
            update: 'admin/monedas/edit',
            create: 'admin/monedas/add',
            destroy: 'admin/monedas/delete'
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