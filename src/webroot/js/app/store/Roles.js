Ext.define('SisInventarios.store.Roles', {
    extend: 'Ext.data.Store',
    model: 'SisInventarios.model.Rol',
    autoLoad: true,
    proxy: {
        type: 'ajax',
        method:'POST',
        api: {
            read: 'admin/roles',
            update: 'admin/roles/edit',
            create: 'admin/roles/add',
            destroy: 'admin/roles/delete'
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