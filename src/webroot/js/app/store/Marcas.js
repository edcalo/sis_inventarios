Ext.define('SisInventarios.store.Marcas', {
    extend: 'Ext.data.Store',
    model: 'SisInventarios.model.Marca',
    autoLoad: true,
    proxy: {
        type: 'ajax',
        //headers: { 'Content-Type': 'application/json;charset=utf-8' },
        method:'POST',
        api: {
            read: 'admin/marcas',
            update: 'admin/marcas/edit',
            create: 'admin/marcas/add',
            destroy: 'admin/marcas/delete'
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