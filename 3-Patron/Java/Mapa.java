package buildercomposite;

public class Mapa implements IMapa{
    private Mazmorra mazmorra;
    private Tesoro tesoro;
    private Textura textura;
    
    public Mapa(Mazmorra mazmorra,Tesoro tesoro, Textura textura){
        this.mazmorra = mazmorra;
        this.tesoro = tesoro;
        this.textura = textura;
    }

    public Mazmorra getMazmorra(){
        return this.mazmorra;
    }
    public void setMazmorra(Mazmorra mazmorra){
        this.mazmorra = mazmorra;
    }
    public Tesoro getTesoro(Tesoro tesoro){
        return this.tesoro;
    }
    public void setTesoro(Tesoro tesoro){
        this.tesoro = tesoro;
    }
    public Textura getTextura(){
        return this.textura;
    }
    public void setTextura(Textura textura){
        this.textura = textura;
    }
    public String verMapa(){
        return ("Masmorra: "+  this.mazmorra+"\n Tesoro: "+this.tesoro+"\n Textura: "+this.textura);
    }
}
