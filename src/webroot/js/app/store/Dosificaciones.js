Ext.define('SisInventarios.store.Dosificaciones', {
    extend: 'Ext.data.Store',
    model: 'SisInventarios.model.Dosificacion',
    autoLoad: true,
    proxy: {
        type: 'ajax',
        method:'POST',
        api: {
            read: 'admin/dosificaciones',
            update: 'admin/dosificaciones/edit',
            create: 'admin/dosificaciones/add',
            destroy: 'admin/dosificaciones/delete'
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