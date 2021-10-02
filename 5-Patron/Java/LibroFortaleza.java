package patron5;

public class LibroFortaleza extends Libro{
    private int duracion;
    private String texto;

    public LibroFortaleza(int duracion, String texto) {
        this.duracion = duracion;
        this.texto = texto;
    }

    public int getDuracion() {
        return duracion;
    }

    public String getTexto() {
        return texto;
    }

    public void setDuracion(int duracion) {
        this.duracion = duracion;
    }

    public void setTexto(String texto) {
        this.texto = texto;
    }
    
    @Override
    public String verStats(){
        return ("Duracion: "+this.duracion + "\nEscrito antiguo: "+ this.texto);
    }
}
