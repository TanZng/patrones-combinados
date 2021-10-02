package patron5;

public class Hechizo extends HabilidadMagica{
    private Particulas particulas;
    private Libro libro;
    private int ataque;
    private Sprite sprite;
    private Animacion animacion;

    public Hechizo(Particulas particulas, Libro libro, int ataque, Sprite sprite, Animacion animacion,  int nivel, String descripcion) {
        super(nivel, descripcion);
        this.particulas = particulas;
        this.libro = libro;
        this.ataque =  ataque;
        this.sprite = sprite;
        this.animacion = animacion;
    }

    

    
  
    public Animacion getAnimacion() {
        return animacion;
    }

    public int getAtaque() {
        return ataque;
    }

    public Libro getLibro() {
        return libro;
    }

    public Particulas getParticulas() {
        return particulas;
    }

    public Sprite getSprite() {
        return sprite;
    }

    public void setAnimacion(Animacion animacion) {
        this.animacion = animacion;
    }

    public void setAtaque(int ataque) {
        this.ataque = ataque;
    }

    public void setLibro(Libro libro) {
        this.libro = libro;
    }

    public void setParticulas(Particulas particulas) {
        this.particulas = particulas;
    }

    public void setSprite(Sprite sprite) {
        this.sprite = sprite;
    }

    @Override
    public void subirNivelHabilidad() {
        super.subirNivelHabilidad(); 
    }
    
   
    public String verStats(){
        return("Ataque: "+this.ataque+"Libro con: "+ this.libro.verStats());
    }
    
    public Libro crearLibro(int tipoLibro,int duracion, String texto){
        switch (tipoLibro) {
            case 1:
                this.libro = new LibroFortaleza(duracion, texto);
                break;
            case 2:
                this.libro = new LibroVentisca(duracion, texto);
                break;
            case 3:
                this.libro = new LibroLluviaEspadas(duracion, texto);
                break;
            default:
                break;
        }
        return null;
    } 
}
