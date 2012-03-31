Ext.define('SisInventarios.store.Proveedores', {
    extend: 'Ext.data.Store',
    model: 'SisInventarios.model.Proveedor',
    autoLoad: true,
    proxy: {
        type: 'ajax',
        method:'POST',
        api: {
            read: 'admin/proveedores',
            update: 'admin/proveedores/edit',
            create: 'admin/proveedores/add',
            destroy: 'admin/proveedores/delete'
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