package patron4;

public class AdaptadorO_SkinOnline extends Skin {
    private Skin skin;

    public AdaptadorO_SkinOnline(Skin skin) {
        super(null, null);
        this.skin = skin;
    }
   
     
    public void cargarNuevoSkin(String ruta){
        //La informacion y texturas se consiguen desde la ruta
        this.skin = new SkinOnline(infokin, texturaskin);
        setTipoSkin("Online");
        
    }
    
}
