package com.example.andreashenriksson.ourapp;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.Button;

public class isac_spel extends AppCompatActivity {

    public Button myButton;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.isac_spel);

        myButton = (Button) findViewById(R.id.bt0);
    }
}
