package masterwholeproxy;

public class GestordeArmadura{
    private Armadura armadura;
    
    public GestordeArmadura(Armadura armadura){
        this.armadura = armadura;
    }
    public boolean mejorarArmadura(int mejora){
        this.armadura.setNivel(mejora);
        return true;
    }
    public boolean repararArmadura(int incremento){
        this.armadura.incDuracion(incremento);
        return true;
    }
    public Armadura generarArmadura(String nombre,int nivel,float dano,float duracion){
        return (new Armadura(nombre,nivel,dano,duracion));
    }
    
}   
