package patron5;

import java.io.File;

public class Sprite {
    private int id;
    private File file;

    public Sprite(int id, File file) {
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
    
    public void cargarSprite(File file){
        String ruta = "C:\\CyberMagik2069\\Sprites\\Sprite.txt";
        System.out.println("Cargando arhcivo ......\n");
        System.out.println(ruta + " Detectada.");
    }
}
