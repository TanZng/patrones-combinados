package patron4;

public class InfoSkin {
    private String Autor;
    private String fechaCreacion;
    private String Descripcion;

    public InfoSkin(String Autor, String fechaCreacion, String Descripcion) {
        this.Autor = Autor;
        this.fechaCreacion = fechaCreacion;
        this.Descripcion = Descripcion;
    }

    public String getAutor() {
        return Autor;
    }

    public String getDescripcion() {
        return Descripcion;
    }

    public String getFechaCreacion() {
        return fechaCreacion;
    }

    public void setAutor(String Autor) {
        this.Autor = Autor;
    }

    public void setDescripcion(String Descripcion) {
        this.Descripcion = Descripcion;
    }

    public void setFechaCreacion(String fechaCreacion) {
        this.fechaCreacion = fechaCreacion;
    }
    
    public String[] getInfoSkin(){
        String[] info  = new String[]{this.Autor,this.fechaCreacion,this.Descripcion};
        return info ;
    }
}
