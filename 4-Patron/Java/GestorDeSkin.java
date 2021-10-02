package patron4;

public class GestorDeSkin {
    private Skin skinjugador;

    public GestorDeSkin() {
        this.skinjugador = null;
    }

    public Skin getSkinjugador() {
        return skinjugador;
    }

    public void setSkinjugador(Skin skinjugador) {
        this.skinjugador = skinjugador;
    }
    
    public void mostrarSkin(){
->      Skin skinjugador1 = this.skinjugador;
mostrarSkin();2

    }
    public Skin cambiarSkin(String tipo,String ruta){
        if(tipo.equals("online")){
            this.skinjugador  = new AdaptadorO_SkinOnline(ruta);
        }else{
            this.skinjugador = new AdaptadorC_SkinLocal(ruta);
        }
        return this.skinjugador;
        
    }
    
    
    
            
}
