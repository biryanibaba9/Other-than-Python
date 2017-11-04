package edu.niu.cs.z1809837.barclayspremierleague;

import android.content.Context;
import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.Spinner;
import android.widget.Toast;

import java.lang.reflect.Array;

import static android.widget.Toast.*;

public class MainActivity extends AppCompatActivity {

    private Spinner team;
    private ImageView show_team;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        team = (Spinner)findViewById(R.id.choice);
        ArrayAdapter<String> adapter = new ArrayAdapter (getApplicationContext(),R.layout.spinner_main,SpinnerInfo.valueArray);
        team.setAdapter(adapter);
        team.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener(){
            @Override
            public void onItemSelected(AdapterView<?> parent, View view,int position,long id) {
               int choice = parent.getSelectedItemPosition();
                show_team = (ImageView)findViewById(R.id.team_image);

                switch(choice)
                {
                    case 0:
                        show_team.setImageResource(R.drawable.chelsea);
                        break;
                    case 1:
                        show_team.setImageResource(R.drawable.arsenal);
                        break;
                    case 2:
                        show_team.setImageResource(R.drawable.manu);
                        break;
                    case 3:
                        show_team.setImageResource(R.drawable.manchester);
                        break;
                    case 4:
                        show_team.setImageResource(R.drawable.tott);
                        break;
                }
            }

            @Override
            public void onNothingSelected(AdapterView<?> parent) {

            }
        });
    }

    public void goTeam(View view){
        int calChoice = team.getSelectedItemPosition();

        switch (calChoice){
            case 0:
                Intent target = new Intent(MainActivity.this,Chelsea.class);
                startActivity(target);
                break;
            case 1:
                target = new Intent(MainActivity.this,Arsenal.class);
                startActivity(target);
                break;
            case 2:
                target = new Intent(MainActivity.this,ManUtd.class);
                startActivity(target);
                break;
            case 3:
                target = new Intent(MainActivity.this,ManCity.class);
                startActivity(target);
                break;
            case 4:
                target = new Intent(MainActivity.this,TottenhamHotSpurs.class);
                startActivity(target);
                break;
        }

    }







}
