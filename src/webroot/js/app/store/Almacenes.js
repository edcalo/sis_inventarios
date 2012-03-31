Ext.define('SisInventarios.store.Almacenes', {
    extend: 'Ext.data.Store',
    model: 'SisInventarios.model.Almacen',
    autoLoad: true,
    proxy: {
        type: 'ajax',
        method:'POST',
        api: {
            read: 'admin/almacenes',
            update: 'admin/almacenes/edit',
            create: 'admin/almacenes/add',
            destroy: 'admin/almacenes/delete'
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