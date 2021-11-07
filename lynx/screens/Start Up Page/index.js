import React from "react";
import {View, StyleSheet, Text, Image, Button } from "react-native";
import { NavigationContainer } from '@react-navigation/native';
import { CreateNativeStackNavigatior, createNativeStackNavigator } from '@react-navigation/native-stack';
import { createDrawerNavigator } from '@react-navigation/drawer';

import StartUpLogin from "../Start Up- Login";


function StartUp() {
    return (
        <View style={styles.container}>
            <Text>
                
                <Image source={require('../../assets/lynx.png')} />
           </Text>
        </View>
    );
}

const styles = StyleSheet.create({
  container: {
    position: 'absolute',
    top: '40%',
    left: '6%',
  }

});

export default StartUp;