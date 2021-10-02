package patron4;

public class Skin {
    private String nombreSkin;
    private String tipoSkin;

    public Skin(String nombreSkin, String tipoSkin) {
        this.nombreSkin = nombreSkin;
        this.tipoSkin = tipoSkin;
    }

    public String getNombreSkin() {
        return nombreSkin;
    }

    public String getTipoSkin() {
        return tipoSkin;
    }

    public void setNombreSkin(String nombreSkin) {
        this.nombreSkin = nombreSkin;
    }

    public void setTipoSkin(String tipoSkin) {
        this.tipoSkin = tipoSkin;
    }
    
    
}
