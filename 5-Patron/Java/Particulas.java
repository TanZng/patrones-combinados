package patron5;

import java.io.File;

public class Particulas {
    private int id;
    private File file;

    public Particulas(int id, File file) {
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
    
    public void cargarParticulas(File file){
        String ruta = "C:\\CyberMagik2069\\Particles\\Particulas.txt";
        System.out.println("\nCargando archivos....\n");
        System.out.println(ruta + " Detectada.");
    }
}
