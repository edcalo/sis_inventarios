Ext.define('SisInventarios.controller.Roles', {
    extend: 'Ext.app.Controller',
    stores: [
    'Roles'
    ],
    models: [
    'Rol'
    ],
    views: [
    'rol.List',
    'rol.Add'
    ],
    requires:[
    'Ext.window.MessageBox',
    'Ext.tip.*'
    ],
    init: function() {
        this.control({
            'rollist button[action=addrol]': {
                click: this.addRol
            },
            'rollist button[action=editrol]': {
                click: this.editRol
            },
            'rollist #listaroles': {
                itemdblclick: this.editRol
            },
            'rollist button[action=deleterol]': {
                click: this.deleteRol
            },
            'roladd button[action=save]': {
                click: this.saveRol
            }
        });
    },
    addRol: function(button){
        Ext.widget('roladd');

    },
    viewRol:function(a, b, c){
        console.log('Ver detalle del grupo');
    },
    editRol: function(source, record){
        if(source.getXType() == 'button'){
            var win = source.up('window');
            record = win.down('#listaroles').getSelectionModel().getSelection();
            record = record[0];
        }
        var view = Ext.widget('roladd');
        view.down('form').loadRecord(record);

    },
    deleteRol: function(button){
        Ext.MessageBox.confirm(
            'Eliminar Rol',
            'Esta seguro que desea eliminar los roles seleccionados',
            function(confirm){
                if(confirm == 'yes'){
                    var win = button.up('window');
                    var seleccion = win.down('#listaroles').getSelectionModel().getSelection();
                    this.getRolesStore().remove(seleccion);
                    this.getRolesStore().sync();
                }
            },
            this
            );
    },
    saveRol: function(button){
        var win    = button.up('window');
        var form   = win.down('form');
        var record = form.getRecord();
        var values = form.getValues();
        if(form.getForm().isValid()){
            if(!record){
                record = this.getRolModel().create();
                record.set(values);
                this.getRolesStore().insert(0, record);
            }else{
                record.set(values);
            }
        
            win.close();
            this.getRolesStore().sync();
        }
    }

});