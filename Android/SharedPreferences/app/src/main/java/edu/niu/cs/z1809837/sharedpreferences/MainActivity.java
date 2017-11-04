package edu.niu.cs.z1809837.sharedpreferences;

import android.content.SharedPreferences;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    private EditText etName;
    SharedPreferences pref;
    String str;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        pref = getApplicationContext().getSharedPreferences("MyPref",MODE_PRIVATE);
        str = pref.getString("key","Snow");
        etName = (EditText)findViewById(R.id.editTextName);
        Toast.makeText(this,"The name is "+ str,Toast.LENGTH_LONG).show();

    }

    public void savePref(View v)
    {
        SharedPreferences.Editor editor = pref.edit();
        String name = etName.getText().toString();
        editor.putString("key",name);
        editor.commit();
    }
}
