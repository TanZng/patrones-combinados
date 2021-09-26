package masterwholeproxy;

public class Personaje {
    private Armadura armadura;
    private Arma arma;
    private Experiencia experiencia;
    private Ultimate ultimate;
    
    public Personaje(Armadura armadura, Arma arma, Experiencia experiencia,Ultimate ultimate){
        this.arma = arma;
        this.armadura = armadura;
        this.experiencia = experiencia;
        this.ultimate = ultimate;
    }
    
    public Armadura getArmadura(){
        return this.armadura;
    }
    public Arma getArma(){
        return this.arma;
    }
    public Experiencia getExperiencia(){
        return this.experiencia;
    }
    public Ultimate getUltimate(){
        return this.ultimate;
    }
    public void setArmadura(Armadura armadura){
        this.armadura = armadura;
    }
    public void setArma(Arma arma){
        this.arma = arma;
    }
    public void setExperiencia(Experiencia experiencia){
        this.experiencia = experiencia;
    }
    public void setUltimate(Ultimate ultimate){
        this.ultimate = ultimate;
    }
    public String verStats(){
        return ("Ultimate: "+ this.ultimate + "\n Armadura: "+this.armadura +"\nArma: "
                                        +this.arma+"\n Experiencia: "+ this.experiencia);
    }
}
