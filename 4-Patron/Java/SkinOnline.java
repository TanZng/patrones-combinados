package patron4;

public class SkinOnline {
    private InfoSkin infokin;
    private TexturaSkin texturaskin;

    public SkinOnline(InfoSkin infokin, TexturaSkin texturaskin) {
        this.infokin = infokin;
        this.texturaskin = texturaskin;
    }

    public InfoSkin getInfokin() {
        return infokin;
    }

    public TexturaSkin getTexturaskin() {
        return texturaskin;
    }

    public void setInfokin(InfoSkin infokin) {
        this.infokin = infokin;
    }

    public void setTexturaskin(TexturaSkin texturaskin) {
        this.texturaskin = texturaskin;
    }
    
    public String mostrarInfoSkin(){
        String[] info = this.infokin.getInfoSkin();
        info = this.infokin.getInfoSkin();
        return ("Autor: "+ info[0] + "\nFecha: "+ info[1]+ "\nDescripcion: "+info[2]);
    }
    
    
}
