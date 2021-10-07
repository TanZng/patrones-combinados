package abstractmasterwhole;

    public abstract class Criatura{
    private String nombre;
    private int defensa;
    private int ataque;
    private int nivel;
    public Criatura(String nombre, int defensa, int ataque, int nivel){
        this.nombre = nombre;
        this.defensa = defensa;
        this.ataque = ataque;
        this.nivel = nivel;
    }
    public String getNombre(){
        return this.nombre;
    }
    public void setNombre(String nombre){
        this.nombre = nombre;
    }
    public int getDefensa(){
        return this.defensa;
    }
    public void setDefensa(int defensa){
        this.defensa = defensa;
    }
    public int getAtaque(){
        return this.ataque;
    }
    public void setAtaque(int ataque){
        this.ataque = ataque;
    }
    public int getNivel(){
        return this.nivel;
    }
    public void setNivel(int nivel){
        this.nivel = nivel;
    }
    
    abstract public int decSalud(int dec);
    abstract public  int incNivel(); 
    
    public String verStats(){
        return ("Nombre: "+ this.nombre+"\n Defensa: "+this.defensa+ "\n Ataque: "
                +  this.ataque + "\n Nivel: "+ this.nivel);
    }
        
}
