package patron5;

public class HabilidadMagica {
    private int nivel;
    private String descripcion;

    public HabilidadMagica(int nivel, String descripcion) {
        this.nivel = nivel;
        this.descripcion = descripcion;
    }

    public String getDescripcion() {
        return descripcion;
    }

    public int getNivel() {
        return nivel;
    }

    public void setDescripcion(String descripcion) {
        this.descripcion = descripcion;
    }

    public void setNivel(int nivel) {
        this.nivel = nivel;
    }
    
    public String verInfoHabilidad(){
        return ("Nivel: "+ this.nivel+ "\nDescripcion: "+this.descripcion);
    }
    public void subirNivelHabilidad(){
        this.nivel +=1;
    }
}
