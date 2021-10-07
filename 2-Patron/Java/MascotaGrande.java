package abstractmasterwhole;
public class MascotaGrande extends Criatura{
    private Montura montura = null;
    private Armadura armadura = null;
    private Ultimate ultimate = null;
    String nombre;
    int defensa;
    int ataque;
    int nivel;
    public MascotaGrande(String nombre, int defensa, int ataque, int nivel) {
        super(nombre, defensa, ataque, nivel);
                
   
    }
    public Montura getMontura(){
        return this.montura;
    }
    public void setMontura(Montura montura) {
        this.montura = montura;
    }
    public Armadura getArmadura(){
        return this.armadura;
    }

    public void setArmadura(Armadura armadura) {
        this.armadura = armadura;
    }
    public Ultimate getUltimate() {
        return this.ultimate;
    }

    public void setUltimate(Ultimate ultimate) {
        this.ultimate = ultimate;
    }
    public Ultimate usarUltimate(){
        return this.ultimate;
    }
    public float Atacar(){
        
        return (ataque*(nivel*0.5));
    }
    
    @Override
    public int decSalud(int dec) {
        return this.salud -= dec/this.defensa;
    }
    
    @Override
    public int incNivel(){
        nivel += 1;
        return nivel;
    }
    
    
    @Override
    public String verStats(){
       
        return (super.verStats()+ "\n Montura: "+ this.montura+ "\nArmadura: "+ this.armadura+ "\nUltimate: "+ this.ultimate);
    }
    
    
  
}
