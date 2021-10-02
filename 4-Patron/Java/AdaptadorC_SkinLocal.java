package patron4;

public class AdaptadorC_SkinLocal extends Skin implements ISkinLocal{
    private Skin skin;

    public AdaptadorC_SkinLocal() {
        super(null,null);
        this.skin = null;
    }

    AdaptadorC_SkinLocal(String ruta) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    
    @Override
    public void cargarSkinLocal(String ruta){
        
        this.skin = ruta;
        setTipoSkin("Local");
        
    }

    @Override
    public void mostrarSkin() {
        System.out.println("<img src = "+ skin + "alt = 'skin'>");

    }
    
    
}
