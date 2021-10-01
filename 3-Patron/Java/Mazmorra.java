package buildercomposite;
import java.util.*;

public class Mazmorra {
    private ArrayList<IMapa> Salas = new ArrayList<IMapa>();

    public Mazmorra(ArrayList<IMapa> salas){
        this.Salas = salas;
    }

    public Mazmorra() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    
    public ArrayList<IMapa> getSalas(){
        return this.Salas;
    }
    
    public void setSalas(ArrayList<IMapa> salas){
        this.Salas = salas;
    }
    public void addSala(IMapa sala){
        this.Salas.add(sala);
    }
}
