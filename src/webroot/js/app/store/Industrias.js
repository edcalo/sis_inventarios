Ext.define('SisInventarios.store.Industrias', {
    extend: 'Ext.data.Store',
    model: 'SisInventarios.model.Industria',
    autoLoad: true,
    proxy: {
        type: 'ajax',
        method:'POST',
        api: {
            read: 'admin/industrias',
            update: 'admin/industrias/edit',
            create: 'admin/industrias/add',
            destroy: 'admin/industrias/delete'
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