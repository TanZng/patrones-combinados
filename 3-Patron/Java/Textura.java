package buildercomposite;

public class Textura{
    private Imagen Imagen;
    private int Ancho;
    private int Alto;
    
    public Textura(Imagen imagen, int alto, int ancho){
        this.Imagen = imagen;
        this.Alto = alto;
        this.Ancho = ancho;
    }
    
    public Imagen getImagen(){
        return this.Imagen;
    }
    public void setImagen(Imagen imagen){
        this.Imagen = imagen;
    }
    public int getAlto(){
        return this.Alto;
    }
    public void setAlto(int alto){
        this.Alto = alto;
    }
    public int getAncho(){
        return this.Ancho;
    }
    public void setAncho(int ancho){
        this.Ancho = ancho;
    }
    
}
