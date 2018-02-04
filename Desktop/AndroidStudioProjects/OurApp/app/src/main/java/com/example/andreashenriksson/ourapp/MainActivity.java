package com.example.andreashenriksson.ourapp;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;


public class MainActivity extends AppCompatActivity {

    TextView tv_spel;
    Button b_andreas, b_isac;





    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        final Button b_andreas = (Button) findViewById(R.id.b_andreas);
        final Button b_isac = (Button) findViewById(R.id.b_isac);

        b_andreas.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                startActivity(new Intent(MainActivity.this, andreas_spel.class));



            }
        });

        b_isac.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                startActivity(new Intent(MainActivity.this, isac_spel.class));


            }
        });




    }
}
