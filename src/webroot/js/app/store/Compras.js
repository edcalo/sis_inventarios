Ext.define('SisInventarios.store.Compras',{
    extend:'Ext.data.Store',
    model:'SisInventarios.model.Compra',
    autoLoad: true,
    proxy:{
        type:'ajax',
        method:'POST',
        api:{
            read: 'admin/compras',
            update: 'admin/compras/edit',
            create: 'admin/compras/add',
            destroy: 'admin/compras/delete'
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