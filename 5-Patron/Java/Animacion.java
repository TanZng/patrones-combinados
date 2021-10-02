package patron5;

import java.io.File;

public class Animacion {
    private int id;
    private File file;

    public Animacion(int id, File file) {
        this.id = id;
        this.file = file;
    }

    public File getFile() {
        return file;
    }

    public int getId() {
        return id;
    }

    public void setFile(File file) {
        this.file = file;
    }

    public void setId(int id) {
        this.id = id;
    }
    
    public void cargarAnimacion(File file){
        String ruta = "C:\\CyberMagik2069\\Animations\\Animacion.txt";
        System.out.println("Cargando archivo..... \n");
        System.out.println(ruta + "Detectado");
    }    
}
