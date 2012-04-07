Ext.define('SisInventarios.store.Descuentos', {
    extend: 'Ext.data.Store',
    model: 'SisInventarios.model.Descuento',
    autoLoad: true,
    proxy: {
        type: 'ajax',
        method:'POST',
        api: {
            read: 'admin/descuentos',
            update: 'admin/descuentos/edit',
            create: 'admin/descuentos/add',
            destroy: 'admin/descuentos/delete'
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