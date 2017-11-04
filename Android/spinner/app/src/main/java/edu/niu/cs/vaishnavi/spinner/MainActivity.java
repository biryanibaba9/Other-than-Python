package edu.niu.cs.vaishnavi.spinner;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Spinner;
import android.widget.Toast;

import static edu.niu.cs.vaishnavi.spinner.R.id.parent;

public class MainActivity extends AppCompatActivity implements AdapterView.OnItemSelectedListener
{
    private Spinner spinner;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        spinner = (Spinner)findViewById(R.id.spinner);
        ArrayAdapter<CharSequence> dogAdapter = ArrayAdapter.createFromResource(this,R.array.myList,android.R.layout.simple_spinner_item);
        dogAdapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        spinner.setAdapter(dogAdapter);
    }
    @Override
    public void onItemSelected(AdapterView<?> adapterView, View view, int pos, long id) {
        Toast.makeText(this, "The item selected is" + adapterView.getItemAtPosition(pos), Toast.LENGTH_SHORT).show();
    }

        @Override
                public void onNothingSelected(AdapterView<?> adapterView)
        {

        }

}
