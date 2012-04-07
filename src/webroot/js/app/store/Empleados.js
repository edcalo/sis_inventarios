Ext.define('SisInventarios.store.Empleados', {
    extend: 'Ext.data.Store',
    model: 'SisInventarios.model.Empleado',
    autoLoad: true,
    proxy: {
        type: 'ajax',
        method:'POST',
        api: {
            read: 'admin/empleados',
            update: 'admin/empleados/edit',
            create: 'admin/empleados/add',
            destroy: 'admin/empleados/delete'
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